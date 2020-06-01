# L5-swagger Cheat Sheet

1. [Introduction](#Intro)
2. [Parameters](#Param)
3. [Request Body](#ReqB)
4. [Responses](#Resp)

***

## Introduction <a name="Intro"></a>
``` PHP
     /**
     * @OA\{Method}(
     *      path="/",
     *      tags={""},
     *      summary="",
     *      description="",
```
- **Method** can be **Get**, **Post**, **Patch**, **Put**, or **delete**.
- **path** : without the server prefix. ex: ```path="/admins/{AdminID}",``` escribe the ```/api/superadmin/admins/{AdminID}``` route.
- **tags** are used to sort api routes by context, one route can have multiples tags. ex: ```tags={"Auth", "Merchant"},```
- **summary**: brief description of what the route does, use **description** to be more detailed.
***
``` PHP
     *      @OA\Server(url="/api/superadmin"),
```
|-> makes sure the route is tested with the right server url.
***
``` PHP
     *      security={{"bearer": {}}}
```
|-> to add when a route is secure with a bearer token
***
## Parameters <a name="Param"></a>
Parameters are used to describe arguments past directly in the path or by query.   

Example :
``` PHP
     * @OA\Parameter(
     *     name="customerId",
     *     in="path",
     *     required=true,
     *     description="Customer ID",
     *     @OA\Schema(
     *         type="integer",
     *         example="123456",
     *     )
     * ),
     * @OA\Parameter(
     *          name="page",
     *          in="query",
     *          description="The requested pagination index",
     *          @OA\Schema(
     *              type="integer",
     *              example="3",
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="pageSize",
     *          in="query",
     *          description="The number of items to show in the result set",
     *          @OA\Schema(
     *              type="integer",
     *              example="10",
     *          )
     *      ),
 ```
***
## Request Body <a name="ReqB"></a>
Request Body is used to describe variable(s) past by form (usually with __Post__, __Patch__ or __Put__ methods).
There is only one RequestBody even for several variables.   

Here some examples:
``` PHP
     *      @OA\RequestBody(
     *          description="Input data format",
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/x-www-form-urlencoded",
     *          @OA\JsonContent(
     *              example={"phoneNumber": "0612345678"}
     *          )
     *          ),
     *      ),
```
``` PHP
     * @OA\RequestBody(
     *          @OA\MediaType(mediaType="multipart/form-data",@OA\Schema(
     *              @OA\property(
     *                  property="file",
     *                  format="binary",
     *                  type="string",
     *                  description="The file to import (as csv with header columns)",
     *              ),
     *              @OA\property(
     *                  property="source",
     *                  type="string",
     *              ),
     *              required={"file"}
     *          ))
     *      ),
```
Instead of declaring one property by variable, a one line JsonContent example does the same output in most cases.
``` PHP
   *      @OA\RequestBody(
   *          request="updateAdmin",
   *          description="Enter admin data",
   *          @OA\JsonContent(
   *              example={"name": "Mickey","email": "mick@kerman.com","passwordSend": true,"password": "12345678","role": 3}
   *          )
   *      ),
```
***
## Responses <a name="Resp"></a>
Some response examples:
``` PHP
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *              example={"data": {}}
     *          ),
     *      ),
```
``` PHP
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized: Access token is missing or invalid"
     *      ),
```
``` PHP
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found"
     *      ),
```
``` PHP
     *      @OA\Response(
     *          response=422,
     *          description="Error: Unprocessable Entity"
     *      ),
```
``` PHP
     *      @OA\Response(
     *          response=500,
     *          description="Internal Server Error"
     *      ),
```
