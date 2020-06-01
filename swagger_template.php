<?PHP

/**
     * @OA\{Method}(
     *      path="/",
     *      tags={""},
     *      summary="",
     *      @OA\Parameter(
     *          name="",
     *          in="path",
     *          required=true,
     *          description="",
     *          @OA\Schema(
     *              type="string",
     *              example="example",
     *          )
     *      ),
     *      @OA\RequestBody(
     *          description="",
     *          required=true,
     *          @OA\JsonContent(
     *              example={}
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *              example={"data": {}}
     *          ),
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized: Access token is missing or invalid"
     *      ),
     *      @OA\Server(url="/api/app"),
     *      security={{"bearer": {}}}
     * )
     * 
     * Returns {description of return values}
     * @param {param1 of the fonction}
     * @param {param2 of the fonction}
     * {...}
     * @throws PongoException
     * @return \Illuminate\Http\JsonResponse
     */
?>
