<?php
namespace Airavata\Model\Data\Replica;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class FileModelType {
  const FILE = 0;
  const DIRECTORY = 1;
  static public $__names = array(
    0 => 'FILE',
    1 => 'DIRECTORY',
  );
}

final class StorageResourceType {
  const GATEWAY_DATA_STORE = 0;
  const BACKUP_GATEWAY_DATA_STORE = 1;
  const COMPUTE_RESOURCE = 2;
  const LONG_TERM_STORAGE_RESOURCE = 3;
  const OTHER = 4;
  static public $__names = array(
    0 => 'GATEWAY_DATA_STORE',
    1 => 'BACKUP_GATEWAY_DATA_STORE',
    2 => 'COMPUTE_RESOURCE',
    3 => 'LONG_TERM_STORAGE_RESOURCE',
    4 => 'OTHER',
  );
}

final class ReplicaPersistentType {
  const TRANSIENT = 0;
  const PERSISTENT = 1;
  static public $__names = array(
    0 => 'TRANSIENT',
    1 => 'PERSISTENT',
  );
}

class FileCollectionModel {
  static $_TSPEC;

  /**
   * @var string
   */
  public $collectionId = null;
  /**
   * @var string
   */
  public $gatewayId = null;
  /**
   * @var string
   */
  public $username = null;
  /**
   * @var string[]
   */
  public $sharedUsers = null;
  /**
   * @var bool
   */
  public $sharedPublic = null;
  /**
   * @var string
   */
  public $collectionName = null;
  /**
   * @var string
   */
  public $collectionDescription = null;
  /**
   * @var string[]
   */
  public $fileIdList = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'collectionId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'gatewayId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'sharedUsers',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        5 => array(
          'var' => 'sharedPublic',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'collectionName',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'collectionDescription',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'fileIdList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['collectionId'])) {
        $this->collectionId = $vals['collectionId'];
      }
      if (isset($vals['gatewayId'])) {
        $this->gatewayId = $vals['gatewayId'];
      }
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['sharedUsers'])) {
        $this->sharedUsers = $vals['sharedUsers'];
      }
      if (isset($vals['sharedPublic'])) {
        $this->sharedPublic = $vals['sharedPublic'];
      }
      if (isset($vals['collectionName'])) {
        $this->collectionName = $vals['collectionName'];
      }
      if (isset($vals['collectionDescription'])) {
        $this->collectionDescription = $vals['collectionDescription'];
      }
      if (isset($vals['fileIdList'])) {
        $this->fileIdList = $vals['fileIdList'];
      }
    }
  }

  public function getName() {
    return 'FileCollectionModel';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->collectionId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->gatewayId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->sharedUsers = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->sharedUsers []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->sharedPublic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->collectionName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->collectionDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::LST) {
            $this->fileIdList = array();
            $_size6 = 0;
            $_etype9 = 0;
            $xfer += $input->readListBegin($_etype9, $_size6);
            for ($_i10 = 0; $_i10 < $_size6; ++$_i10)
            {
              $elem11 = null;
              $xfer += $input->readString($elem11);
              $this->fileIdList []= $elem11;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FileCollectionModel');
    if ($this->collectionId !== null) {
      $xfer += $output->writeFieldBegin('collectionId', TType::STRING, 1);
      $xfer += $output->writeString($this->collectionId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->gatewayId !== null) {
      $xfer += $output->writeFieldBegin('gatewayId', TType::STRING, 2);
      $xfer += $output->writeString($this->gatewayId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 3);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sharedUsers !== null) {
      if (!is_array($this->sharedUsers)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('sharedUsers', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRING, count($this->sharedUsers));
        {
          foreach ($this->sharedUsers as $iter12)
          {
            $xfer += $output->writeString($iter12);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sharedPublic !== null) {
      $xfer += $output->writeFieldBegin('sharedPublic', TType::BOOL, 5);
      $xfer += $output->writeBool($this->sharedPublic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->collectionName !== null) {
      $xfer += $output->writeFieldBegin('collectionName', TType::STRING, 6);
      $xfer += $output->writeString($this->collectionName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->collectionDescription !== null) {
      $xfer += $output->writeFieldBegin('collectionDescription', TType::STRING, 7);
      $xfer += $output->writeString($this->collectionDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileIdList !== null) {
      if (!is_array($this->fileIdList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('fileIdList', TType::LST, 8);
      {
        $output->writeListBegin(TType::STRING, count($this->fileIdList));
        {
          foreach ($this->fileIdList as $iter13)
          {
            $xfer += $output->writeString($iter13);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class FileModel {
  static $_TSPEC;

  /**
   * @var string
   */
  public $fileId = null;
  /**
   * @var string
   */
  public $gatewayId = null;
  /**
   * @var string
   */
  public $username = null;
  /**
   * @var string[]
   */
  public $sharedUsers = null;
  /**
   * @var bool
   */
  public $sharedPublic = null;
  /**
   * @var string
   */
  public $fileName = null;
  /**
   * @var string
   */
  public $fileDescription = null;
  /**
   * @var string
   */
  public $sha256Checksum = null;
  /**
   * @var int
   */
  public $fileType = null;
  /**
   * @var int
   */
  public $fileSize = null;
  /**
   * @var string
   */
  public $dataType = null;
  /**
   * @var int
   */
  public $creationTime = null;
  /**
   * @var int
   */
  public $lastModifiedTime = null;
  /**
   * @var \Airavata\Model\Data\Replica\FileReplicaModel[]
   */
  public $fileReplicas = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'fileId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'gatewayId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'sharedUsers',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        5 => array(
          'var' => 'sharedPublic',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'fileName',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'fileDescription',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'sha256Checksum',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'fileType',
          'type' => TType::I32,
          ),
        10 => array(
          'var' => 'fileSize',
          'type' => TType::I32,
          ),
        11 => array(
          'var' => 'dataType',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'creationTime',
          'type' => TType::I64,
          ),
        13 => array(
          'var' => 'lastModifiedTime',
          'type' => TType::I64,
          ),
        14 => array(
          'var' => 'fileReplicas',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Airavata\Model\Data\Replica\FileReplicaModel',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['fileId'])) {
        $this->fileId = $vals['fileId'];
      }
      if (isset($vals['gatewayId'])) {
        $this->gatewayId = $vals['gatewayId'];
      }
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['sharedUsers'])) {
        $this->sharedUsers = $vals['sharedUsers'];
      }
      if (isset($vals['sharedPublic'])) {
        $this->sharedPublic = $vals['sharedPublic'];
      }
      if (isset($vals['fileName'])) {
        $this->fileName = $vals['fileName'];
      }
      if (isset($vals['fileDescription'])) {
        $this->fileDescription = $vals['fileDescription'];
      }
      if (isset($vals['sha256Checksum'])) {
        $this->sha256Checksum = $vals['sha256Checksum'];
      }
      if (isset($vals['fileType'])) {
        $this->fileType = $vals['fileType'];
      }
      if (isset($vals['fileSize'])) {
        $this->fileSize = $vals['fileSize'];
      }
      if (isset($vals['dataType'])) {
        $this->dataType = $vals['dataType'];
      }
      if (isset($vals['creationTime'])) {
        $this->creationTime = $vals['creationTime'];
      }
      if (isset($vals['lastModifiedTime'])) {
        $this->lastModifiedTime = $vals['lastModifiedTime'];
      }
      if (isset($vals['fileReplicas'])) {
        $this->fileReplicas = $vals['fileReplicas'];
      }
    }
  }

  public function getName() {
    return 'FileModel';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fileId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->gatewayId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->sharedUsers = array();
            $_size14 = 0;
            $_etype17 = 0;
            $xfer += $input->readListBegin($_etype17, $_size14);
            for ($_i18 = 0; $_i18 < $_size14; ++$_i18)
            {
              $elem19 = null;
              $xfer += $input->readString($elem19);
              $this->sharedUsers []= $elem19;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->sharedPublic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fileName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fileDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sha256Checksum);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->fileType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->fileSize);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->dataType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->creationTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->lastModifiedTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::LST) {
            $this->fileReplicas = array();
            $_size20 = 0;
            $_etype23 = 0;
            $xfer += $input->readListBegin($_etype23, $_size20);
            for ($_i24 = 0; $_i24 < $_size20; ++$_i24)
            {
              $elem25 = null;
              $elem25 = new \Airavata\Model\Data\Replica\FileReplicaModel();
              $xfer += $elem25->read($input);
              $this->fileReplicas []= $elem25;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FileModel');
    if ($this->fileId !== null) {
      $xfer += $output->writeFieldBegin('fileId', TType::STRING, 1);
      $xfer += $output->writeString($this->fileId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->gatewayId !== null) {
      $xfer += $output->writeFieldBegin('gatewayId', TType::STRING, 2);
      $xfer += $output->writeString($this->gatewayId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 3);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sharedUsers !== null) {
      if (!is_array($this->sharedUsers)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('sharedUsers', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRING, count($this->sharedUsers));
        {
          foreach ($this->sharedUsers as $iter26)
          {
            $xfer += $output->writeString($iter26);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sharedPublic !== null) {
      $xfer += $output->writeFieldBegin('sharedPublic', TType::BOOL, 5);
      $xfer += $output->writeBool($this->sharedPublic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileName !== null) {
      $xfer += $output->writeFieldBegin('fileName', TType::STRING, 6);
      $xfer += $output->writeString($this->fileName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileDescription !== null) {
      $xfer += $output->writeFieldBegin('fileDescription', TType::STRING, 7);
      $xfer += $output->writeString($this->fileDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sha256Checksum !== null) {
      $xfer += $output->writeFieldBegin('sha256Checksum', TType::STRING, 8);
      $xfer += $output->writeString($this->sha256Checksum);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileType !== null) {
      $xfer += $output->writeFieldBegin('fileType', TType::I32, 9);
      $xfer += $output->writeI32($this->fileType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileSize !== null) {
      $xfer += $output->writeFieldBegin('fileSize', TType::I32, 10);
      $xfer += $output->writeI32($this->fileSize);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataType !== null) {
      $xfer += $output->writeFieldBegin('dataType', TType::STRING, 11);
      $xfer += $output->writeString($this->dataType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->creationTime !== null) {
      $xfer += $output->writeFieldBegin('creationTime', TType::I64, 12);
      $xfer += $output->writeI64($this->creationTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->lastModifiedTime !== null) {
      $xfer += $output->writeFieldBegin('lastModifiedTime', TType::I64, 13);
      $xfer += $output->writeI64($this->lastModifiedTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileReplicas !== null) {
      if (!is_array($this->fileReplicas)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('fileReplicas', TType::LST, 14);
      {
        $output->writeListBegin(TType::STRUCT, count($this->fileReplicas));
        {
          foreach ($this->fileReplicas as $iter27)
          {
            $xfer += $iter27->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class FileReplicaModel {
  static $_TSPEC;

  /**
   * @var string
   */
  public $replicaName = null;
  /**
   * @var string
   */
  public $replicaDescription = null;
  /**
   * @var string
   */
  public $storageHostname = null;
  /**
   * @var string
   */
  public $storageResourceId = null;
  /**
   * @var string
   */
  public $filePath = null;
  /**
   * @var int
   */
  public $creationTime = null;
  /**
   * @var int
   */
  public $validUntilTime = null;
  /**
   * @var int
   */
  public $storageResourceType = null;
  /**
   * @var int
   */
  public $replicaPersistentType = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'replicaName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'replicaDescription',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'storageHostname',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'storageResourceId',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'filePath',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'creationTime',
          'type' => TType::I64,
          ),
        7 => array(
          'var' => 'validUntilTime',
          'type' => TType::I64,
          ),
        8 => array(
          'var' => 'storageResourceType',
          'type' => TType::I32,
          ),
        9 => array(
          'var' => 'replicaPersistentType',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['replicaName'])) {
        $this->replicaName = $vals['replicaName'];
      }
      if (isset($vals['replicaDescription'])) {
        $this->replicaDescription = $vals['replicaDescription'];
      }
      if (isset($vals['storageHostname'])) {
        $this->storageHostname = $vals['storageHostname'];
      }
      if (isset($vals['storageResourceId'])) {
        $this->storageResourceId = $vals['storageResourceId'];
      }
      if (isset($vals['filePath'])) {
        $this->filePath = $vals['filePath'];
      }
      if (isset($vals['creationTime'])) {
        $this->creationTime = $vals['creationTime'];
      }
      if (isset($vals['validUntilTime'])) {
        $this->validUntilTime = $vals['validUntilTime'];
      }
      if (isset($vals['storageResourceType'])) {
        $this->storageResourceType = $vals['storageResourceType'];
      }
      if (isset($vals['replicaPersistentType'])) {
        $this->replicaPersistentType = $vals['replicaPersistentType'];
      }
    }
  }

  public function getName() {
    return 'FileReplicaModel';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->replicaName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->replicaDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageHostname);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageResourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->filePath);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->creationTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->validUntilTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->storageResourceType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->replicaPersistentType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FileReplicaModel');
    if ($this->replicaName !== null) {
      $xfer += $output->writeFieldBegin('replicaName', TType::STRING, 1);
      $xfer += $output->writeString($this->replicaName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->replicaDescription !== null) {
      $xfer += $output->writeFieldBegin('replicaDescription', TType::STRING, 2);
      $xfer += $output->writeString($this->replicaDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageHostname !== null) {
      $xfer += $output->writeFieldBegin('storageHostname', TType::STRING, 3);
      $xfer += $output->writeString($this->storageHostname);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageResourceId !== null) {
      $xfer += $output->writeFieldBegin('storageResourceId', TType::STRING, 4);
      $xfer += $output->writeString($this->storageResourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->filePath !== null) {
      $xfer += $output->writeFieldBegin('filePath', TType::STRING, 5);
      $xfer += $output->writeString($this->filePath);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->creationTime !== null) {
      $xfer += $output->writeFieldBegin('creationTime', TType::I64, 6);
      $xfer += $output->writeI64($this->creationTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->validUntilTime !== null) {
      $xfer += $output->writeFieldBegin('validUntilTime', TType::I64, 7);
      $xfer += $output->writeI64($this->validUntilTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageResourceType !== null) {
      $xfer += $output->writeFieldBegin('storageResourceType', TType::I32, 8);
      $xfer += $output->writeI32($this->storageResourceType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->replicaPersistentType !== null) {
      $xfer += $output->writeFieldBegin('replicaPersistentType', TType::I32, 9);
      $xfer += $output->writeI32($this->replicaPersistentType);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


