# SaveStatsRequestBody


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `attemptNumber`                                                        | *int*                                                                  | :heavy_check_mark:                                                     | N/A                                                                    |
| `jobId`                                                                | *int*                                                                  | :heavy_check_mark:                                                     | N/A                                                                    |
| `stats`                                                                | [AttemptStats](../../models/shared/AttemptStats.md)                    | :heavy_check_mark:                                                     | N/A                                                                    |
| `streamStats`                                                          | array<[AttemptStreamStats](../../models/shared/AttemptStreamStats.md)> | :heavy_minus_sign:                                                     | N/A                                                                    |