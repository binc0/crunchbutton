ALTER TABLE queue CHANGE COLUMN `type` `type` enum('order','notification-driver','order-confirm','order-receipt','notification-your-driver','order-pexcard-funds', 'notification-driver-priority', 'notification-minutes-way') DEFAULT NULL;