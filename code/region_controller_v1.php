<?php

[...]

final class RegionController
{
    /**
     * @Route("/regions", name="get_regions", methods={"GET"})
     */
    public function cgetAction(Request $request): Response
    {
        // Authentication
        // Several function calls of "RegionManager"
        // Preperation of Data Transfer Objects
        // Returning response with DTOs
    }

    /**
     * @Route("/regions/{id}", name="get_region", methods={"GET"})
     */
    public function getAction(int $id): Response { /* Implementation */ }

    /**
     * @Route("/regions/{id}", name="patch_region", methods={"PATCH"})
     */
    public function patchAction(int $id, Request $request): Response { /* Implementation */ }

    [...]
}
