<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 * @package    local_intelliboard
 * @copyright  2019 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    http://intelliboard.net/
 */

namespace local_intelliboard\attendance\reports;

use local_intelliboard\reports\entities\in_filter;
use local_intelliboard\reports\report_trait;

class lateness_percent_table extends report {
    use report_trait;

    public function get_data($params) {
        global $DB;

        if(!$params['users']) {
          return [];
        }

        $userFilter = new in_filter($params['users'], "user");

        return $DB->get_records_sql(
            "SELECT u.*
               FROM {user} u
              WHERE u.id {$userFilter->get_sql()}",
            $userFilter->get_params()
        );
    }
}