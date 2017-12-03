<?php
	class Comments extends CI_Controller{
		public function createCom(){

            $recipe = $this->input->post('recipe');
            $this->form_validation->set_rules('body', 'Comment', 'required');
            $data['comments'] = $this->comments_model->get_comments();
            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/header');
                $this->load->view('pages/'.$recipe, $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->comments_model->create_comment($recipe);
                $this->session->set_flashdata('comment_posted', 'Comment has been posted. ');
                redirect($recipe);
            }

		}

        public function deleteCom($id){
            $recipe = $this->input->post('recipe');
            $this->comments_model->delete_comment($id);

            $this->session->set_flashdata('comment_deleted', 'Your comment has been deleted.');
            redirect($recipe);
        }


	}
