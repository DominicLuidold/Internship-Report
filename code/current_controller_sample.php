<?php

[...]

final class SampleController extends AbstractController
{
    [...]

    /**
     * @Route("/samples", name="get_samples", methods={"GET"})
     */
    public function cgetAction(Request $request): Response { // Implementation }

    /**
     * @Route("/samples/{id}", name="get_sample", methods={"GET"})
     */
    public function getAction(int $id): Response { // Implementation }

    /**
     * @Route("/samples", name="post_sample", methods={"POST"})
     */
    public function postAction(Request $request): Response { // Implementation }

    /**
     * @Route("/samples/{id}", name="patch_sample", methods={"PATCH"})
     */
    public function patchAction(int $id, Request $request): Response { // Implementation }

    /**
     * @Route("/samples/{id}", name="delete_sample", methods={"DELETE"})
     */
    public function deleteAction(int $id): Response { // Implementation }

    [...]
}
