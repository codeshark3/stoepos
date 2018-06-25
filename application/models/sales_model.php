<?php

    class Sales_model extends CI_Model{
      
            //user data array
         function fetch_data($query){
             $this->db->select("*");
             $this->db->from("orders");
             if($query != '')
             {
                 $this->db->like('item_name', $query);
                 $this->db->or_like('price', $query);

             }
             $this->db->order_by('id','DESC');
             return $this->db->get();
         }

                    }

              
        

     
