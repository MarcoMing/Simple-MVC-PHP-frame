<?php 

class NewsModel
{
	
	function __construct()
	{
		// print 'I am the news model';  
	}

	private $articles = array  
    (  
        //文章1  
        'new' => array  
        (  
            'title' => 'New Website' ,  
            'content' => 'Welcome to the site! We are glad to have you here.'  
        )  
        ,  
        //2  
        'mvc' => array  
        (  
            'title' => 'PHP MVC Frameworks are Awesome!' ,  
            'content' => 'It really is very easy. Take it from us!'  
        )  
        ,  
        //3  
        'test' => array  
        (  
            'title' => 'Testing' ,  
            'content' => 'This is just a measly test article.'  
        )  
    );  


    /** 
     * 根据标题获取文章 
     *  
     * @param string $articleName 
     *  
     * @return array $article 
     */  
    public function get_article($articleName)  
    {  
        //从数组中获取文章  
        $article = $this->articles[$articleName];  
      
        return $article;  
    }  




}





 ?>