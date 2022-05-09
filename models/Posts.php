<?php
namespace app\models;

use yii\db\ActiveRecord;

    class Posts extends ActiveRecord
    {
        private $id;
        private $title;
        private $description;
        private $category;

        public function rules(){
            return [
                [['id','title','description','category'],'required']
            ];
        }
    }
?>
