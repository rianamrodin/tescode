<?php 
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Post_model;

	class Post extends Controller
	{
		public function index()
		{
			$model = new Post_model();
			$data['tes'] = $model->getPost();
			echo view('post_view', $data);
		}

		public function add_new()
		{
			return view('add_post_view');
		}

		public function save()
		{
			$model = new Post_model();
			$data = array(
				'title' => $this->request->getPost('title'),
				'content' => $this->request->getPost('content'),
				'date' => $this->request->getPost('date'),
				'username' => $this->request->getPost('username')
			);
			$model->savePost($data);
			return redirect()->to('/post');
		}

		public function edit($id)
		{
			$model = new Post_model();
			$data['tesEdit'] = $model->getPost($id)->getRow();
			echo view('edit_post_view', $data);		
		}

		public function update()
		{
			$model = new Post_model();
			$id = $this->request->getPost('id');
			$data = array(
				'title' => $this->request->getPost('title'),
				'content' => $this->request->getPost('content'),
				'date' => $this->request->getPost('date'),
				'username' => $this->request->getPost('username')
			);
			$model->updatePost($data, $id);
			return redirect()->to('/post');
		}

		public function delete($id)
		{
			$model = new Post_model();
			$model->deletePost($id);
			return redirect()->to('/post');
		}
	}
 ?>