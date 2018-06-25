<?php
    class Sales extends CI_Controller{

           
            
            function index(){
                $this->load->view('posa');
            }

/*
           function fetch()
           {
               $output = '';
               $query = '';
               $this->load->model('sales_model');
               if($this->input->post('query'))
               {
                    $query = $this->input->post('query');
               }
                $data = $this->sales_model->fetch_data($query);
                $output .='
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <tr>
                    <th>item name</th>
                    <th>price</th>
                    </tr>
                ';
                if($data->num_rows() > 0){
                    foreach($data->result( as $row){
                        $output .='
                                <tr>
                                    <td>'.$row->item_name.'</td>
                                    <td>'.$row->price.'</td>
                                </tr>
                        ';
                    }
                }else
                {
                    $output .= '<tr>
                                <td colspan="5">No Data Found</td>

                                </tr>';
                }
                $output .= '</table>';
                 echo $output;
           }
*/

    }
