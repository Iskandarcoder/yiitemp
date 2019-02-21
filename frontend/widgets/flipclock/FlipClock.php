<?php


namespace frontend\widgets\flipclock;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\Block;


class FlipClock extends Block
{
    /**
     * @var array Options of Flipclock.
     */
    public $options = array();
    
    /**
     * @var string Selector for flipclock. If is null, then will be use ID of widget.
     */
    public $selector;
    
    /**
     * @var int Time in seconds for timer.
     */
    public $time;
    
    /**
     * @var string Name of var for control Flipclock.
     */
    public $varName;
    
    public function init()
    {
    	parent::init();
    	 
        
        if ($this->selector === null)
        {
            $this->selector = '#' . $this->id;
        }
        if ($this->varName === null)
        {
            $this->varName = $this->id;
        }
        
        
        $view = $this->getView();
        
        FlipclockAsset::register($view);
        
		$js[] = "var {$this->varName} =  new FlipClock($(" . Json::encode($this->selector) . "), " . Json::encode($this->time) . ", " . Json::encode($this->options) . ");";
       
        $view->registerJs(implode("\n", $js),  \yii\web\View::POS_END, 'clock');
        
        

    }
    
    public function run()
    {
        if (strpos($this->selector, '.') === 0)
        {
            echo Html::tag('div',Html::encode($this->selector), array('class' => substr($this->selector, 1, strlen($this->selector))));
        }
        else
        {
            echo Html::tag('div', Html::encode($this->selector), array('id' => substr($this->selector, 1, strlen($this->selector))));
        }
    }
    
    
}
