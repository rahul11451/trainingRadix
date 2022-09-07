<?php

include 'Query.php';

class ServiceProvider extends Query
{

    function providerInsert($name,  $email, $number, $status, $address, $city, $pincode, $smPic, $lgPic, $checked, $createdDate, $modifiedDate)
    {

        $result = $this->insert('service_provider', array('sName' => $name, 'sEmail' => $email, 'nPhoneNumber' => $number, 'sAddress' => $address, 'sCity' => $city, 'nPincode' => $pincode, 'sSmPic' => $smPic, 'sLgPic' => $lgPic, 'bStatus' => $status, 'dCreatedDate' => $createdDate, 'dModifiedDate' => $modifiedDate));

        $id = $this->conn->lastInsertId();

        foreach ($checked as $ids) {
            $result = $this->insert('business_details', array('nServiceDetailId' => $ids, 'nProviderId' => $id[0]['nId']));
        }

        return array($result, $id);
    }

    function providerEdit($name,  $email, $number, $status, $address, $city, $pincode, $smPic, $lgPic, $checked, $modifiedDate, $id)
    {
        $result = $this->update('service_provider', array('sName' => $name, 'sEmail' => $email, 'nPhoneNumber' => $number, 'sAddress' => $address, 'sCity' => $city, 'nPincode' => $pincode, 'sSmPic' => $smPic, 'sLgPic' => $lgPic, 'bStatus' => $status, 'dModifiedDate' => $modifiedDate), array('nId' => array($id, '=')));

        foreach ($checked as $ids) {
            $select = $this->select('business_details', '*', array('nProviderId' => array($id, '=', 'AND'), 'nServiceDetailId' => array($ids, '=')));
            
            if(empty($select)) {
                $result = $this->insert('business_details', array('nServiceDetailId' => $ids, 'nProviderId' => $id));
            }
        }

        $selectId = $this->select('business_details', '*', array('nProviderId' => array($id, '=')));

        foreach ($selectId as $k => $value) {
            if(!in_array($selectId[$k]['nServiceDetailId'], $checked)) {
                $result = $this->delete('business_details', array('nServiceDetailId' => array($selectId[$k]['nServiceDetailId'], '=', 'AND'), 'nProviderId' => array($id, '=')));
            }
        }

        return $result;
    }
}
