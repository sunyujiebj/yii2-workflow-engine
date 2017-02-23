<?php

namespace yiifloruit\workflow;

use yii\base\Component;
use yii\base\ExitException;

class Publish extends Component
{
    
    /**
     * 挂载文件
     * @param string $filePath
     * @return array
     */
    public function actionMount($filePath) {
        $this->checkFile($filePath);
        
        //解析文件
        return $filePath;
    }
    
    /**
     * 校验文件
     * @param string $filePath
     * @throws ExitException
     */
    public function checkFile($filePath) {
        if (!file_exists($filePath)) {
            throw new ExitException(200, '文件不存在', 100002);
        }
    }

}
