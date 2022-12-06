 $columns = $board->childs;
        foreach ($columns as $column ){
            $work_column = $column->macrotask;
            $logs_column = $work_column->getSortLogs();
            $cards = $column->childs;
            if (!empty($logs_column)) {
                foreach ($logs_column as $e) {
                    $e->value = 'column';
                    $logs->push($e);
                }
            }
            foreach ($cards as $card ) {
                $work_card = $card->macrotask;
                $logs_card = $work_card->getSortLogs();
                if (!empty($logs_card)) {
                    foreach ($logs_card as $x) {
                        $x->card_id = $card->id;
                        $x->value = 'card';
                        $logs->push($x);
                    }
                }
            }

        }
        $logs = $logs->sortByDesc('date');
