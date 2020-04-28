<?php namespace App\Models;
use CodeIgniter\Model;

class Post_model extends Model
{
	protected $table = 'post';

	public function getPost($id = false)
	{
		if($id === false) {
			return $this->findAll();
		}else {
			return $this->getWhere(['idpost' => $id]);
		}
	}

	public function savePost($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function updatePost($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id' => $id));
		return $query;
	}

	public function deletePost($id)
	{
		$query = $this->db->table($this->table)->delete(array('id' => $id));
		return $query;
	}
}
?>