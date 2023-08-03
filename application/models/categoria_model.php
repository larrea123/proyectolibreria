<?php

    class Categoria_model extends CI_Model {

        public function listacategorias()
        {
            $this->db->select('*');
            $this->db->from('categoria');
            $this->db->where('estado','1');
            return $this->db->get();
        }
}
