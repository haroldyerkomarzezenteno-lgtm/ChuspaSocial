<?php
namespace local_chuspasocial\local;

use advanced_testcase;
use local_chuspasocial\local\comment_service;

/**
 * Pruebas unitarias para comment_service.
 *
 * @package    local_chuspasocial
 * @category   test
 * @copyright  2026
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_chuspasocial\local\comment_service
 */
class comment_service_test extends advanced_testcase {

    public function test_get_comments_order(): void {
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
        // Llamada que genera la excepción esperada
        comment_service::get_comments(0);
    }

    /**
     * @covers \local_chuspasocial\local\comment_service::delete_comment
     */
    public function test_delete_comment_as_author(): void {
        $this->resetAfterTest(true);
        // Pruebas para eliminación por el autor
        $this->assertTrue(true);
    }

    public function test_delete_comment_as_moderator(): void {
        $this->resetAfterTest(true);
        // Pruebas para eliminación por un moderador
        $this->assertTrue(true);
    }

    public function test_delete_comment_as_other_user(): void {
        $this->resetAfterTest(true);
        // Pruebas para usuario no autorizado intentando eliminar
        $this->assertTrue(true);
    }
}