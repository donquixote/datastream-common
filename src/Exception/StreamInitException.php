<?php

namespace Donquixote\DataStream\Exception;

class StreamInitException extends \Exception {

  /**
   * @param \Donquixote\DataStream\Exception\StreamWriteException $e
   * @param string[]|mixed $headRow
   *
   * @return \Donquixote\DataStream\Exception\StreamInitException
   */
  static function writeExceptionOnHeadRowWrite(StreamWriteException $e, array $headRow) {
    $headRowExport = var_export($headRow, TRUE);
    return new self("Failed to write head row: $headRowExport.", NULL, $e);
  }

  /**
   * @param \Donquixote\DataStream\Exception\DataException $e
   * @param string[]|mixed $headRow
   *
   * @return \Donquixote\DataStream\Exception\StreamInitException
   */
  static function dataExceptionOnHeadRowWrite(DataException $e, array $headRow) {
    $headRowExport = var_export($headRow, TRUE);
    return new self("Failed to write head row: $headRowExport.", NULL, $e);
  }

}
