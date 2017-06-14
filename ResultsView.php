<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 13.06.17
 * Time: 15:08
 */

class ResultsView
{
    public function output()
    {
        return
            "<p><a href='/index.php?page=search'>"
            . 'Поиск'
            . "</a></p>"
            . "<table><tbody>
                <tr>
                    <td>Сайт</td>
                    <td>Результат</td>
                </tr>
                <tr>
                    <td>Первый сайт</td>
                    <td><a href='/'>Первый результат</a></td>
                </tr>
            </tbody></table>"
            ;
    }
}