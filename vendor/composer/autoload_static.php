<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5605e59498ac917b8f95ea7f80ec7220
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'K' => 
        array (
            'Kint\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
    );

    public static $classMap = array (
        'Podio' => __DIR__ . '/..' . '/podio/podio-php/lib/Podio.php',
        'PodioAction' => __DIR__ . '/..' . '/podio/podio-php/models/PodioAction.php',
        'PodioActivity' => __DIR__ . '/..' . '/podio/podio-php/models/PodioActivity.php',
        'PodioApp' => __DIR__ . '/..' . '/podio/podio-php/models/PodioApp.php',
        'PodioAppField' => __DIR__ . '/..' . '/podio/podio-php/models/PodioAppField.php',
        'PodioAppFieldCollection' => __DIR__ . '/..' . '/podio/podio-php/models/PodioAppFieldCollection.php',
        'PodioAppItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioAppItemField.php',
        'PodioAppMarketShare' => __DIR__ . '/..' . '/podio/podio-php/models/PodioAppMarketShare.php',
        'PodioAssetItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioAssetItemField.php',
        'PodioAuthorizationError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioAuthorizationError.php',
        'PodioBadRequestError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioBadRequestError.php',
        'PodioBatch' => __DIR__ . '/..' . '/podio/podio-php/models/PodioBatch.php',
        'PodioByLine' => __DIR__ . '/..' . '/podio/podio-php/models/PodioByLine.php',
        'PodioCalculationItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioCalculationItemField.php',
        'PodioCalendarEvent' => __DIR__ . '/..' . '/podio/podio-php/models/PodioCalendarEvent.php',
        'PodioCalendarMute' => __DIR__ . '/..' . '/podio/podio-php/models/PodioCalendarMute.php',
        'PodioCategoryItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioCategoryItemField.php',
        'PodioCollection' => __DIR__ . '/..' . '/podio/podio-php/lib/PodioCollection.php',
        'PodioComment' => __DIR__ . '/..' . '/podio/podio-php/models/PodioComment.php',
        'PodioConflictError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioConflictError.php',
        'PodioConnectionError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioConnectionError.php',
        'PodioContact' => __DIR__ . '/..' . '/podio/podio-php/models/PodioContact.php',
        'PodioContactItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioContactItemField.php',
        'PodioConversation' => __DIR__ . '/..' . '/podio/podio-php/models/PodioConversation.php',
        'PodioConversationMessage' => __DIR__ . '/..' . '/podio/podio-php/models/PodioConversationMessage.php',
        'PodioConversationParticipant' => __DIR__ . '/..' . '/podio/podio-php/models/PodioConversationParticipant.php',
        'PodioDataIntegrityError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioDataIntegrityError.php',
        'PodioDateItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioDateItemField.php',
        'PodioDurationItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioDurationItemField.php',
        'PodioEmailItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioEmailItemField.php',
        'PodioEmbed' => __DIR__ . '/..' . '/podio/podio-php/models/PodioEmbed.php',
        'PodioEmbedItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioEmbedItemField.php',
        'PodioError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioError.php',
        'PodioFieldCollection' => __DIR__ . '/..' . '/podio/podio-php/models/PodioFieldCollection.php',
        'PodioFile' => __DIR__ . '/..' . '/podio/podio-php/models/PodioFile.php',
        'PodioFileItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioFileItemField.php',
        'PodioFlow' => __DIR__ . '/..' . '/podio/podio-php/models/PodioFlow.php',
        'PodioForbiddenError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioForbiddenError.php',
        'PodioForm' => __DIR__ . '/..' . '/podio/podio-php/models/PodioForm.php',
        'PodioGoneError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioGoneError.php',
        'PodioGrant' => __DIR__ . '/..' . '/podio/podio-php/models/PodioGrant.php',
        'PodioHook' => __DIR__ . '/..' . '/podio/podio-php/models/PodioHook.php',
        'PodioImageItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioImageItemField.php',
        'PodioImporter' => __DIR__ . '/..' . '/podio/podio-php/models/PodioImporter.php',
        'PodioIntegration' => __DIR__ . '/..' . '/podio/podio-php/models/PodioIntegration.php',
        'PodioInvalidGrantError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioInvalidGrantError.php',
        'PodioItem' => __DIR__ . '/..' . '/podio/podio-php/models/PodioItem.php',
        'PodioItemCollection' => __DIR__ . '/..' . '/podio/podio-php/models/PodioItemCollection.php',
        'PodioItemDiff' => __DIR__ . '/..' . '/podio/podio-php/models/PodioItemDiff.php',
        'PodioItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioItemField.php',
        'PodioItemFieldCollection' => __DIR__ . '/..' . '/podio/podio-php/models/PodioItemFieldCollection.php',
        'PodioItemRevision' => __DIR__ . '/..' . '/podio/podio-php/models/PodioItemRevision.php',
        'PodioLinkedAccountData' => __DIR__ . '/..' . '/podio/podio-php/models/PodioLinkedAccountData.php',
        'PodioLocationItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioLocationItemField.php',
        'PodioLogger' => __DIR__ . '/..' . '/podio/podio-php/lib/PodioLogger.php',
        'PodioMissingRelationshipError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioMissingRelationshipError.php',
        'PodioMoneyItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioMoneyItemField.php',
        'PodioNotFoundError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioNotFoundError.php',
        'PodioNotification' => __DIR__ . '/..' . '/podio/podio-php/models/PodioNotification.php',
        'PodioNotificationContext' => __DIR__ . '/..' . '/podio/podio-php/models/PodioNotificationContext.php',
        'PodioNotificationGroup' => __DIR__ . '/..' . '/podio/podio-php/models/PodioNotificationGroup.php',
        'PodioNumberItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioNumberItemField.php',
        'PodioOAuth' => __DIR__ . '/..' . '/podio/podio-php/lib/PodioOAuth.php',
        'PodioObject' => __DIR__ . '/..' . '/podio/podio-php/lib/PodioObject.php',
        'PodioOrganization' => __DIR__ . '/..' . '/podio/podio-php/models/PodioOrganization.php',
        'PodioOrganizationMember' => __DIR__ . '/..' . '/podio/podio-php/models/PodioOrganizationMember.php',
        'PodioPhoneItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioPhoneItemField.php',
        'PodioPhoneOrEmailItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioPhoneOrEmailItemField.php',
        'PodioProgressItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioProgressItemField.php',
        'PodioQuestion' => __DIR__ . '/..' . '/podio/podio-php/models/PodioQuestion.php',
        'PodioQuestionAnswer' => __DIR__ . '/..' . '/podio/podio-php/models/PodioQuestionAnswer.php',
        'PodioQuestionOption' => __DIR__ . '/..' . '/podio/podio-php/models/PodioQuestionOption.php',
        'PodioRateLimitError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioRateLimitError.php',
        'PodioRating' => __DIR__ . '/..' . '/podio/podio-php/models/PodioRating.php',
        'PodioRecurrence' => __DIR__ . '/..' . '/podio/podio-php/models/PodioRecurrence.php',
        'PodioReference' => __DIR__ . '/..' . '/podio/podio-php/models/PodioReference.php',
        'PodioReminder' => __DIR__ . '/..' . '/podio/podio-php/models/PodioReminder.php',
        'PodioResponse' => __DIR__ . '/..' . '/podio/podio-php/lib/PodioResponse.php',
        'PodioSearchResult' => __DIR__ . '/..' . '/podio/podio-php/models/PodioSearchResult.php',
        'PodioServerError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioServerError.php',
        'PodioSpace' => __DIR__ . '/..' . '/podio/podio-php/models/PodioSpace.php',
        'PodioSpaceMember' => __DIR__ . '/..' . '/podio/podio-php/models/PodioSpaceMember.php',
        'PodioStatus' => __DIR__ . '/..' . '/podio/podio-php/models/PodioStatus.php',
        'PodioStreamObject' => __DIR__ . '/..' . '/podio/podio-php/models/PodioStreamObject.php',
        'PodioSubscription' => __DIR__ . '/..' . '/podio/podio-php/models/PodioSubscription.php',
        'PodioTag' => __DIR__ . '/..' . '/podio/podio-php/models/PodioTag.php',
        'PodioTagItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioTagItemField.php',
        'PodioTagSearch' => __DIR__ . '/..' . '/podio/podio-php/models/PodioTagSearch.php',
        'PodioTask' => __DIR__ . '/..' . '/podio/podio-php/models/PodioTask.php',
        'PodioTaskLabel' => __DIR__ . '/..' . '/podio/podio-php/models/PodioTaskLabel.php',
        'PodioTextItemField' => __DIR__ . '/..' . '/podio/podio-php/models/field/PodioTextItemField.php',
        'PodioUnavailableError' => __DIR__ . '/..' . '/podio/podio-php/lib/error/PodioUnavailableError.php',
        'PodioUser' => __DIR__ . '/..' . '/podio/podio-php/models/PodioUser.php',
        'PodioUserMail' => __DIR__ . '/..' . '/podio/podio-php/models/PodioUserMail.php',
        'PodioUserStatus' => __DIR__ . '/..' . '/podio/podio-php/models/PodioUserStatus.php',
        'PodioVia' => __DIR__ . '/..' . '/podio/podio-php/models/PodioVia.php',
        'PodioView' => __DIR__ . '/..' . '/podio/podio-php/models/PodioView.php',
        'PodioVoting' => __DIR__ . '/..' . '/podio/podio-php/models/PodioVoting.php',
        'PodioWidget' => __DIR__ . '/..' . '/podio/podio-php/models/PodioWidget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5605e59498ac917b8f95ea7f80ec7220::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5605e59498ac917b8f95ea7f80ec7220::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5605e59498ac917b8f95ea7f80ec7220::$classMap;

        }, null, ClassLoader::class);
    }
}
