<?php 

class BaseController{
    const VIEW_FOLDER_NAME='Views';
    const MODEL_FOLDER_NAME='Models';
    const LAYOUT='layout';
    /* 
        +đường dẫn: folderName.fileName
        + lấy từ sau thư mục Views
    */
    // hàm dùng để chuyển đến các file của Views
    // protected function view($viewPath,array $data=[])
    // {
    //     foreach($data as $key =>$value)
    //     {
    //         $$key=$value;
    //     }
    //     $viewPath=self::VIEW_FOLDER_NAME.'/'.str_replace('.','/',$viewPath).'.php';
    //     return require($viewPath);
    // }
    
    protected function view($viewPath, array $data = []) {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        // Render the view
        $viewPath = self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';
        ob_start();
        require($viewPath);
        $content = ob_get_clean();

        // Include the layout
        $layoutPath = self::VIEW_FOLDER_NAME . '/' . self::LAYOUT . '.php';
        require($layoutPath);
    }

    // hàm dùng để chuyển đến các file của Models
    protected function loadModel($modelPath)
{
    $viewPath=self::MODEL_FOLDER_NAME.'/'.str_replace('.','/',$modelPath).'.php';
        return require($viewPath);
}
}
?>