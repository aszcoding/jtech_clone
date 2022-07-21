CREATE TABLE service_descriptions(
description_id INT AUTO_INCREMENT NOT NULL,
description TEXT NOT NULL,
FOREIGN KEY(description_id) REFERENCES service_titles(service_id));