document.addEventListener('DOMContentLoaded', () => {
    // JSON
    let lists = [];

    const menu = document.querySelector('#menu');
    const orderList = document.querySelector('#orderList');
    const totalPrice = document.querySelector('#totalPrice');
    const personalInfo = document.querySelector('#personalInfo');
    let cart = [];

    // 現在のURLのクエリパラメータを取得
    const params = new URLSearchParams(window.location.search);
    var category = params.get('category');
    if (!category) category = "";

    // Fetch the menu items from the API
    const HOST = "172.16.2.75";
    const API_MENU_URL = `http://${HOST}/NMB/api/menu/list.php?category=${category}`
    console.log(API_MENU_URL)

    function fetchMenuItems() {
        fetch(API_MENU_URL)
            .then(response => response.json())
            .then(data => {
                lists = data;
                showMenuItems();
            })
            .catch(error => {
                console.error('Error fetching menu data:', error);
            });
    }

    function showMenuItems() {
        console.log(lists)
        lists.forEach((item, index) => {
            const content = `
                <div class="menu-item">
                    <img src="images/${item.category}/${item.image}" alt="${item.name}">
                    <h2>${item.name}</h2>
                    <p>${item.price}円</p>
                    <button onclick="addToCart(${index})">注文する</button>
                </div>`;
            menu.insertAdjacentHTML('beforeend', content);
        });
    }

    window.addToCart = function (index) {
        const selectedItem = lists[index];
        cart.push(selectedItem);
        showOrderSummary();
    }

    window.removeFromCart = function (index) {
        cart.splice(index, 1);
        showOrderSummary();
    }

    function showOrderSummary() {
        orderList.innerHTML = '';

        let total = 0;
        cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.className = 'order-item';

            const itemText = document.createElement('span');
            itemText.textContent = `${item.name} - ${item.price}円`;

            const cancelButton = document.createElement('button');
            cancelButton.textContent = '取り消す';
            cancelButton.addEventListener('click', () => {
                removeFromCart(index);
            });

            li.appendChild(itemText);
            li.appendChild(cancelButton);
            orderList.appendChild(li);
            total += item.price;
        });

        totalPrice.textContent = `合計金額: ${total}円`;
    }

    document.querySelector('#proceedToPersonalInfo').addEventListener('click', () => {
        document.querySelector('#orderSummary').classList.add('hidden');
        personalInfo.classList.remove('hidden');
    });

    document.querySelector('#personal-info-form').addEventListener('submit', (event) => {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;

        const orderData = {
            items: cart,
            total: cart.reduce((sum, item) => sum + item.price, 0),
            customer: { name, email }
        };

        fetch('submit_order.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(orderData)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    localStorage.setItem('orderData', JSON.stringify(orderData));
                    window.location.href = 'order_confirmation.html';
                } else {
                    alert(data.message);
                }
            });
    });

    // Call fetchMenuItems to load the menu data when the page loads
    fetchMenuItems();
});
