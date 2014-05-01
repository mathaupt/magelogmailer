magelogmailer
=============

log mailer for Magento to get the information out of the log files

The module is not meant to replace existing Magento functionality for error handling via email or reports, it is
 meant to have an error monitoring without having to implement a hardware monitoring. Especially in environments
 where you do not have access to implement such functionality.

# Requirements

- send log as attachment
- configure recipient mail (identity)
- option to manually send mail
- configuration to archive old logs to just send new ones
- files larger than xMB will not be sent (configuration)
- Cron Job
- Unit Tests
- Log Categorizer
- option to send the attachment as plain text or compressed

# Status

- initial project setup
- implement configurations

# Next steps

- implement helper functions to read configuration
- implement core logic for sending mails
- implement core logic for reading logs
- unit tests for these core logic implementations
