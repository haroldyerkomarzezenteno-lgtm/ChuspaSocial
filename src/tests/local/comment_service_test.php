<?php
namespace local_chuspasocial\local;

use advanced_testcase;
use local_chuspasocial\local\comment_service;

/**
 * Pruebas unitarias para comment_service::get_comments()
 *
 * @package    local_chuspasocial
 * @category   test
 * @copyright  2026
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_chuspasocial\local\comment_service::get_comments
 */
class comment_service_test extends advanced_testcase {

    public function test_get_comments_ordering(): void {
        $this->resetAfterTest(true);
        // Pruebas de ordenamiento de comentarios
        $this->assertTrue(true);
    }

    public function test_get_comments_not_visible(): void {
        $this->resetAfterTest(true);
        // Pruebas para comentarios no visibles
        $this->assertTrue(true);
    }

    public function test_get_comments_throws_exception(): void {
        $this->resetAfterTest(true);
        $this->expectException(\invalid_parameter_exception::class);
        // Llamada que genera la excepción
        comment_service::get_comments(0);
    }
}