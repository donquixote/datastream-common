<?php

namespace Donquixote\DataStream\Exception;

use Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface;

class StreamCopyRollbackException extends \Exception {

  /**
   * @var \Donquixote\DataStream\Exception\StreamOutRollbackException
   */
  private $eRollback;

  /**
   * @var \Donquixote\DataStream\Exception\StreamCopyException
   */
  private $eCopy;

  /**
   * @var \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface
   */
  private $outStream;

  /**
   * @param string $message
   * @param int $code
   * @param \Donquixote\DataStream\Exception\StreamOutRollbackException $eRollback
   * @param \Donquixote\DataStream\Exception\StreamCopyException $eCopy
   * @param \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface $outStream
   */
  function __construct($message, $code, StreamOutRollbackException $eRollback, StreamCopyException $eCopy, RollbackableOutStreamCommonInterface $outStream) {
    parent::__construct($message, $code, $eRollback);
    $this->eRollback = $eRollback;
    $this->eCopy = $eCopy;
    $this->outStream = $outStream;
  }

  /**
   * @return \Donquixote\DataStream\Exception\StreamCopyException
   */
  function getCopyException() {
    return $this->eCopy;
  }

  /**
   * @return \Donquixote\DataStream\Exception\StreamOutRollbackException
   */
  function getRollbackException() {
    return $this->eRollback;
  }

  /**
   * @return \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface
   */
  function getOutStream() {
    return $this->outStream;
  }

}
