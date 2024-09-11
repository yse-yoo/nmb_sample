<?php
class File
{

    static function uploadImage($file, $category)
    {
        try {
            if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
                $uploadDir = BASE_DIR . "/images/{$category}/";
                if (!is_dir($uploadDir)) {
                    $result = mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir . basename($file['name']);
                $fileType = pathinfo($uploadFile, PATHINFO_EXTENSION);
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                $result = move_uploaded_file($file['tmp_name'], $uploadFile);
            }
        } catch (\Throwable $th) {
            var_dump($th);
            exit;
        }
    }
}
