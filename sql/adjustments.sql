alter table countries
drop foreign key country_continent_final;

alter table countries
drop foreign key country_subregion_final;

alter table countries
drop column numeric_code;

alter table countries
drop column phonecode;

alter table countries
drop column capital;

alter table countries
drop column currency;

alter table countries
drop column currency_name;

alter table countries
drop column currency_symbol;

alter table countries
drop column tld;

alter table countries
drop column native;

alter table countries
drop column region;

alter table countries
drop column region_id;

alter table countries
drop column subregion;

alter table countries
drop column subregion_id;

alter table countries
drop column nationality;

alter table countries
drop column timezones;

alter table countries
drop column translations;

alter table countries
drop column latitude;

alter table countries
drop column longitude;

alter table countries
drop column created_at;

alter table countries
drop column updated_at;

alter table countries
drop column flag;

alter table countries
drop column wikiDataId;

alter table countries
drop column nationality;

alter table countries
drop column timezones;

alter table countries
drop column translations;

alter table countries
drop column latitude;

alter table countries
drop column longitude;

alter table countries
drop column created_at;

alter table countries
drop column updated_at;

alter table countries
drop column flag;

alter table countries
drop column wikiDataId;

alter table cities
drop column created_at;

alter table cities
drop column updated_at;

alter table cities
drop column flag;

alter table cities
drop column wikiDataId;

alter table states
drop column country_code;
