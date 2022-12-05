   $childs = $board->childs;
        foreach ($childs as $child ){
            $work_child = $child->macrotask;
            $logs_child = $work_child->getSortLogs();
            if (!empty($logs_child)) {
                foreach ($logs_child as $e) {
                    $e->value = 'column';
                    $logs->push($e);
                }
            }
        }
