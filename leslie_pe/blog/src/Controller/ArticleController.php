<?php



namespace Controller;


class ArticleController extends Controller{

	public function afficheAll(){
		
		// 1 : Recuperer les infos en BDD

		$articles = $this -> getModel() -> getAllArticles();

		$params = array(
			'articles' => $articles
			
			);
		return $this -> render('layout.html','articles_view.html',$params);
		// 2 : Afficher la vue

		// require __DIR__.'/../View/articles_view.php';

	}

	public function affiche($id){
		$articles = $this -> getModel() -> getArticleById($id);
		$params = array(
			'articles' => $articles,
		
			
			);

		// 1 : Recuperer les infos en BDD

		

		// 2 : Afficher la vue

		return $this -> render('layout.html','view_articles.html',$params);	
	}


	public function afficheByCategory($category){

		$articles = $this -> getModel() -> getArticleByCategory($category);


		// require __DIR__.'/../View/view_articles_category.php'
	}



	public function create(){


	}

	public function modifier($id){


	}

	public function supprimer($id){


	}












}