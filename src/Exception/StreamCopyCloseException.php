<?php

namespace Donquixote\DataStream\Exception;

use Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface;

class StreamCopyCloseException extends \Exception {

  /**
   * @var \Donquixote\DataStream\Exception\StreamOutCloseException
   */
  private $eClose;

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
   * @param \Donquixote\DataStream\Exception\StreamOutCloseException $eClose
   * @param \Donquixote\DataStream\Exception\StreamCopyException $eCopy
   * @param \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface $outStream
   */
  function __construct($message, $code, StreamOutCloseException $eClose, StreamCopyException $eCopy, RollbackableOutStreamCommonInterface $outStream) {
    parent::__construct($message, $code, $eClose);
    $this->eClose = $eClose;
    $this->eCopy = $eCopy;
    $this->outStream = $outStream;
  }

  /**
   * @return \Donquixote\DataStream\Exception\StreamOutRollbackException
   */
  function getCloseException() {
    return $this->eClose;
  }

  /**
   * @return \Donquixote\DataStream\Exception\StreamCopyException
   */
  function getCopyException() {
    return $this->eCopy;
  }

  /**
   * @return \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface
   */
  function getOutStream() {
    return $this->outStream;
  }

}
