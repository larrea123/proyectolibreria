<?php

    class Producto_model extends CI_Model {

        public function listaproductos()
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function listaproductosdeshabilitados()
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('estado','0');
            return $this->db->get();
        }

        public function agregarproducto($data)
        {
            $this->db->insert('producto',$data);
        }

        public function eliminarproducto($idproducto)
        {
            $this->db->where('idProducto',$idproducto);
            $this->db->delete('producto');
        }

        public function recuperarproducto($idproducto)
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('idProducto',$idproducto);
            return $this->db->get();
        }

        public function modificarproducto($idproducto,$data)
        {
            $this->db->where('idProducto',$idproducto);
            $this->db->update('producto',$data);
        }
}
