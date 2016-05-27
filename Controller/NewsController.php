<?php 


class NewsController
{
	
	/** 
     * $template变量会保存与此控制器相关的"view(视图)"的文件名，不包括.php后缀  
     */  
    public $template = 'news';  
  
    /** 
     * 此方法为route.php默认调用 
     *  
     * @param array $getVars 传入到index.php的GET变量数组 
     */  
    public function main(array $getVars)  
    {  
       //加载Model
       //debuga($getVars);
       $model=new NewsModel();
       $arc=$getVars['article'];
       $article=$model->get_article($arc);
       //debuga($article);

       $view = new ViewModel($this->template);   
       //把文章数据赋给视图模板   
       $view->assign('title' , $article['title']);   
       $view->assign('content' , $article['content']); 
      // $view->display(); 

       //echo $data['title']; 
       
    }  
}






 ?>