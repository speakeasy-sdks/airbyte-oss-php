# SourceDiscoverSchemaWriteRequestBody

to write this requested object to database.


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `catalog`                                               | [AirbyteCatalog](../../models/shared/AirbyteCatalog.md) | :heavy_check_mark:                                      | describes the available schema (catalog).               |
| `configurationHash`                                     | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |
| `connectorVersion`                                      | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |
| `sourceId`                                              | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |