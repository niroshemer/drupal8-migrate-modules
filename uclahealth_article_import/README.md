# Migration Workshop 11/12 - 11/14
####Acquia - Stephanie Bridges 
####DGIT - Nir Shemer & Paul Babin

In order to do a migration you will need to create a new module for each type of migration being done (taxonomy, per node type - article, person, etc)

Reference uclahealth_article_import and uclahealth_migrate_profiles for two examples completed during the Migration Workshop

Per Stephanie - the profile example from profiles.ucla.edu will need some additional work as the content is not returned in an array.  Patch is needed but the import does work with a minor hack of migrate_plus

web > profiles > sitefarm_seed > modules > custom > custom-module-name

###Steps To Run from workshop experience

1. fin up
2. fin drush en migrate_tools migrate_plus migrate
3. fin drush cr (for each time you cache rebuild)
4. fin drush en (custom-module-name)
5. fin drush ms (migrate-status) to verify if migration is enabled and will provide last status plus count of existing potential records to import
6. fin drush mim (migrate-import) id_of_custom-module-name
7.  Success

###Going back - updating

Run **fin drush mim --update id_of_migration** to update if already imported and look for changes - helps if you change the mapping of the destination at some point

Run **fin drush mr (migration-rollback) id_of_migration** to rollback if the import result was not desired

###Cleaning up
Sometimes the migration will error out but running a status states it is still importing

Run **fin drush mrs (migrate reset status) id_of_migration** to correct this issue.

###Additional commands
migrate-status - Lists migrations and their status.
migrate-import - Performs import operations.
migrate-rollback - Performs rollback operations.
migrate-stop - Cleanly stops a running operation.
migrate-reset-status - Sets a migration status to Idle if it's gotten stuck.
migrate-messages - Lists any messages associated with a migration import. (drush command gives src id hash - additional detective work to find which source row)




