<?php
namespace Relpat\RelpatNewsfecreator\Controller;

/***
 *
 * This file is part of the "News Frontend Creator" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Patrick Hippler <info@relpat.de>, Relpat
 *
 ***/

/**
 * NewsfrontendController
 */
class NewsfrontendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * newsfrontendRepository
     *
     * @var \Relpat\RelpatNewsfecreator\Domain\Repository\NewsfrontendRepository
     * @inject
     */
    protected $newsfrontendRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $newsfrontends = $this->newsfrontendRepository->findAll();
        $this->view->assign('newsfrontends', $newsfrontends);
    }

    /**
     * action show
     *
     * @param \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend
     * @return void
     */
    public function showAction(\Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend)
    {
        $this->view->assign('newsfrontend', $newsfrontend);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newNewsfrontend
     * @return void
     */
    public function createAction(\Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newNewsfrontend)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->newsfrontendRepository->add($newNewsfrontend);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend
     * @ignorevalidation $newsfrontend
     * @return void
     */
    public function editAction(\Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend)
    {
        $this->view->assign('newsfrontend', $newsfrontend);
    }

    /**
     * action update
     *
     * @param \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend
     * @return void
     */
    public function updateAction(\Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend $newsfrontend)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->newsfrontendRepository->update($newsfrontend);
        $this->redirect('list');
    }
}
