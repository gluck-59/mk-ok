ALTER TABLE ok_variants
    ADD `price_updated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP AFTER price;

UPDATE ok_variants v SET v.price_updated = (
    SELECT created FROM ok_products p WHERE p.id = v.product_id
);

