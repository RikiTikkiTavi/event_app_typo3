CREATE TABLE tx_eventinventory_domain_model_event
(
    uid         int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
    pid         int(11)          DEFAULT '0' NOT NULL,

    name        varchar(255)     DEFAULT ''  NOT NULL,
    description text                         NOT NULL,
    date_time   DATETIME         default NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);