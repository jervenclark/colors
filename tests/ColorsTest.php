<?php

use PHPUnit\Framework\TestCase;

/**
 *  Colors class unit test
 *
 *  @author Jerven Clark Chua
 */
class ColorsTest extends TestCase
{

  /**
   * Check if class has syntax errors
   *
   */
  public function testIsThereAnySyntaxError()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue(is_object($colors));
    unset($colors);
  }

  /**
   * Check fromHex method with uppercase parameter
   *
   */
  public function testFromHexWithUppercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex('FFFFFF') == 'white');
    unset($colors);
  }

  /**
   * Check fromHex method with lowercase parameter
   *
   */
  public function testFromHexWithLowercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex('fffafa') === 'snow');
    unset($colors);
  }

  /**
   * Check fromHex method with ununiform case parameter
   *
   */
  public function testFromHexWithUnuniformCaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex('00cEd1') == 'darkturquoise');
    unset($colors);
  }

  /**
   * Check fromHex method with invalid parameter
   *
   */
  public function testFromHexWithInalidParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex('GoldAndBlue') == '');
    unset($colors);
  }

  /**
   * Check fromHex method with empty parameter
   *
   */
  public function testFromHexWithEmptyParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex('') == '');
    unset($colors);
  }

  /**
   * Check fromHex method with integer parameter
   *
   */
  public function testFromHexWithIntegerParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->fromHex(42) == '');
    unset($colors);
  }

  /**
   * Check toHex method with uppercase parameter
   *
   */
  public function testToHexWithUppercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('TOMATO') == 'FF6347');
    unset($colors);
  }

  /**
   * Check toHex method with lowercase parameter
   *
   */
  public function testToHexWithLowercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('seashell') == 'FFF5EE');
    unset($colors);
  }

  /**
   * Check toHex method with ununiform case parameter
   *
   */
  public function testToHexWithUnuniformCaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('mOccASin') == 'FFE4B5');
    unset($colors);
  }

  /**
   * Check toHex method with invalid parameter
   *
   */
  public function testToHexWithInvalidParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('BlackTiger') == '');
    unset($colors);
  }

  /**
   * Check toHex method with space separated parameter
   *
   */
  public function testToHexWithSpaceSeparatedParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('iv o ry') == 'FFFFF0');
    unset($colors);
  }

  /**
   * Check toHex with empty parameter
   *
   */
  public function testToHexWithEmptyParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex('') == '');
    unset($colors);
  }

  /**
   * Check toHex with integer parameter
   *
   */
  public function testToHexWithIntegerParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toHex(42) == '');
    unset($colors);
  }

  /**
   * Check toRGB with uppercase parameter
   *
   */
  public function testToRGBNonStringWithUppercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toRGB('DARK OLIVE GREEN') == [85,107,47]);
    unset($colors);
  }

  /**
   * Check toRGB with uppercase parameter
   *
   */
  public function testToRGBStringWithUppercaseParameter()
  {
    $colors = new Jervenclark\Colors\Colors;
    $this->assertTrue($colors->toRGB('DARK OLIVE GREEN', true) == '(85,107,47)');
    unset($colors);
  }

}
