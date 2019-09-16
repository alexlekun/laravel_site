<?php
	/**
	 * 
	 */
	class Pages extends Controller
	{
		function __construct()
		{
			
		}

		public function index(){

			if (isLoggedIn()) {
				redirect('posts');
			}
			$data = [
				'title' => 'SharePosts',
				'description' => 'This is simple social network based on TraversyMVC PHP framework'
			];

			if (isLoggedIn()) {
				$this->view('posts/index');
			}

			$this->view('pages/index', $data);
			
		}

		public function about(){
			$data = [
				'title' => 'About us',
				'description' => 'Приложения для публикации своих сообщений.'
			];
			
			$this->view('pages/about', $data);

		}
	}