Info file
------
Like any other module

SourceXML.php file
--------

migrate_plus.migration.create_taxonomy.yml
--------
Most Imp file. This file runs migration. It has a certain format i.e naming convention should be migrate_plus.migration.*.yml.
Generally placed inside config/install to run on module enable.

In source -> fields section, name identifies to other parts in the migration & selector is the tag that is mapped from the source xml file.

In source -> Item selector is important. Map parent tags of xml file.

Eg for tags, name value (field_tags or something else) in source should match source of destination. i.e source=>fields=>name should match process->field_tags->source value.


XML File
------------
Create private directory in sites/default/files.
Place xml folder in sites/default/files/private. For reference right now have placed zipped folder of xml in this module which can be extracted and placed in private folder.


