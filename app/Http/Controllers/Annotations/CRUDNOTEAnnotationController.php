<?php

namespace App\Http\Controllers\Annotations ;

/**
 * @OA\Security(
 *     security={
 *         "BearerAuth": {}
 *     }),

 * @OA\SecurityScheme(
 *     securityScheme="BearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"),

 * @OA\Info(
 *     title="Your API Title",
 *     description="Your API Description",
 *     version="1.0.0"),

 * @OA\Consumes({
 *     "multipart/form-data"
 * }),

 *

 * @OA\PATCH(
 *     path="/api/evaluations/2",
 *     summary="Modification d'une note",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/x-www-form-urlencoded",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="etudiant_id", type="integer"),
 *                     @OA\Property(property="matiere_id", type="integer"),
 *                     @OA\Property(property="date", type="string"),
 *                     @OA\Property(property="valeur", type="string"),
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"CRUD NOTE"},
*),


 * @OA\DELETE(
 *     path="/api/evaluations/3",
 *     summary="Supprimer une note",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="204", description="Deleted successfully"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 * @OA\Response(response="404", description="Not Found"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD NOTE"},
*),


 * @OA\POST(
 *     path="/api/evaluations",
 *     summary="Ajouter une note",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="id", type="integer"),
 *                     @OA\Property(property="etudiant_id", type="integer"),
 *                     @OA\Property(property="matiere_id", type="integer"),
 *                     @OA\Property(property="date", type="string"),
 *                     @OA\Property(property="valeur", type="string"),
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"CRUD NOTE"},
*),


 * @OA\GET(
 *     path="/api/evaluations",
 *     summary="affichage des notes",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD NOTE"},
*),


*/

 class CRUDNOTEAnnotationController {}
