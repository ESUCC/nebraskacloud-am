
CREATE TABLE mcharris.sessions (
                id VARCHAR(32) NOT NULL,
                name VARCHAR(32) NOT NULL,
                modified INTEGER NOT NULL,
                lifetime INTEGER NOT NULL,
                data TEXT NOT NULL,
                CONSTRAINT sessions_id PRIMARY KEY (id)
);


CREATE SEQUENCE mcharris.users_id_seq;

CREATE TABLE mcharris.users (
                id INTEGER NOT NULL DEFAULT nextval('mcharris.users_id_seq'),
                username VARCHAR(512) NOT NULL,
                password VARCHAR(1024) NOT NULL,
                firstname VARCHAR(256) NOT NULL,
                lastname VARCHAR(256) NOT NULL,
                CONSTRAINT users_pk PRIMARY KEY (id)
);


ALTER SEQUENCE mcharris.users_id_seq OWNED BY mcharris.users.id;

CREATE SEQUENCE mcharris.logger_id_seq;

CREATE TABLE mcharris.logger (
                id INTEGER NOT NULL DEFAULT nextval('mcharris.logger_id_seq'),
                time TIMESTAMP DEFAULT current_timestamp NOT NULL,
                level VARCHAR(6) NOT NULL,
                ip VARCHAR(15) NOT NULL,
                title VARCHAR(255) NOT NULL,
                data TEXT,
                users_id INTEGER,
                CONSTRAINT logger_pk PRIMARY KEY (id)
);


ALTER SEQUENCE mcharris.logger_id_seq OWNED BY mcharris.logger.id;

ALTER TABLE mcharris.logger ADD CONSTRAINT users_logger_fk
FOREIGN KEY (users_id)
REFERENCES mcharris.users (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;