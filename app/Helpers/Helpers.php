<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Helpers {

    /**
     * Generate image
     *
     * @param UploadedFile $file
     * @param string $fileName
     *
     * @return string
     */
    private static function createImage(UploadedFile $file, $fileName = '')
    {
        // Get default upload path
        $uploadPath = Config::get('image.path');

        if(!$fileName) {
            $fileName = $file->getClientOriginalName();
        }

        if($file->isValid()) {
            // Upload file to path
            $saveFullPath = $uploadPath . $fileName;
            Image::make($file)->save($saveFullPath);

            return $saveFullPath;
        }
    }

    /**
     * @param $rawFileName
     * @return string
     */
    private static function renameFile($rawFileName, $extensionPart)
    {
        $randomStr = str_random(6);
        $namePart = strstr($rawFileName, $extensionPart, true);

        // Concat file name
        $fileName = str_slug($namePart) . '-' . $randomStr . '.' . $extensionPart;

        return str_limit($fileName, 254, '');
    }

    public static function generatePostImage(UploadedFile $file)
    {
        $fileName = self::renameFile($file->getClientOriginalName(), $file->getClientOriginalExtension());

        // Get full path
        $fullPath = self::createImage($file, $fileName);

        // Return full path
        return $fullPath;
    }
}