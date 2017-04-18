<?php
/**
 * This file is part of The simple daemon extension for the Yii 2 framework
 *
 * The daemon worker watcher. Checks if daemon workers alive and remove dead.
 *
 * @author Inpassor <inpassor@yandex.com>
 * @link https://github.com/Inpassor/yii2-daemon
 */

namespace inpassor\daemon\workers;

declare(ticks=1);

class Watcher extends \inpassor\daemon\Worker
{

    public function run()
    {
        foreach (\inpassor\daemon\Controller::$workersPids as $workerUid => $workerPids) {
            foreach ($workerPids as $workerPidIndex => $workerPid) {
                if (!posix_kill($workerPid, 0)) {
                    unset(\inpassor\daemon\Controller::$workersPids[$workerUid][$workerPidIndex]);
                }
            }
        }
    }

}
