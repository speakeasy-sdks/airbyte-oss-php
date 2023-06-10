# SynchronousJobRead


## Fields

| Field                                                 | Type                                                  | Required                                              | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `configId`                                            | *?string*                                             | :heavy_minus_sign:                                    | only present if a config id was provided.             |
| `configType`                                          | [JobConfigType](../../models/shared/JobConfigType.md) | :heavy_check_mark:                                    | N/A                                                   |
| `connectorConfigurationUpdated`                       | *?bool*                                               | :heavy_minus_sign:                                    | N/A                                                   |
| `createdAt`                                           | *int*                                                 | :heavy_check_mark:                                    | N/A                                                   |
| `endedAt`                                             | *int*                                                 | :heavy_check_mark:                                    | N/A                                                   |
| `id`                                                  | *string*                                              | :heavy_check_mark:                                    | N/A                                                   |
| `logs`                                                | [?LogRead](../../models/shared/LogRead.md)            | :heavy_minus_sign:                                    | N/A                                                   |
| `succeeded`                                           | *bool*                                                | :heavy_check_mark:                                    | N/A                                                   |