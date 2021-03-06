<?php

  class ShippingEasy_Order extends ShippingEasy_Object
  {
    public function __construct($store_api_key = NULL, $values = NULL)
    {
      $this->store_api_key = $store_api_key;
      $this->values = $values;
    }

    public function create()
    {
      return $this->request("post", "/api/stores/$this->store_api_key/orders", NULL, ["order" => $this->values]);
    }

    public function find($id)
    {
      return $this->request("get", "/api/orders/$id");
    }

    public function findAllByStore($params = [])
    {
      return $this->request("get", "/api/stores/$this->store_api_key/orders", $params);
    }

    public function findAll($params = [])
    {
      return $this->request("get", "/api/orders", $params);
    }
  }
