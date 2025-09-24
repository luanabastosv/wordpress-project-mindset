/**
* Retrieves the translation of text.
*
* @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
*/
import { __ } from '@wordpress/i18n';

/**
* Provides utilities to interact with block props and render block content.
* - useBlockProps: Handles block wrapper attributes like className and styles.
* - RichText: A component for rich text editing within blocks.
* - InspectorControls: Allows adding custom controls to the block editor sidebar.
* 
* @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/
*/
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';

/**
* Enables interaction with WordPress entities (e.g., posts, users) using the core data store.
* - useEntityProp: Allows easy access to WordPress custom fields.
* 
* @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-core-data/#useentityprop
*/
import { useEntityProp } from '@wordpress/core-data';

/**
* Provides pre-built UI components for creating block settings in the editor.
* - PanelBody: Groups settings into collapsible panels.
* - PanelRow: Lays out content or controls in rows within a panel.
* - ToggleControl: A toggle switch control for boolean settings.
* 
* @see https://developer.wordpress.org/block-editor/reference-guides/components/panel/
* @see https://developer.wordpress.org/block-editor/reference-guides/components/toggle-control/
*/
import { PanelBody, PanelRow, ToggleControl } from '@wordpress/components';

/**
* The edit function describes the structure of your block in the context of the
* editor. This represents what the editor will render when the block is used.
*
* @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
*
* @return {Element} Element to render.
*/
export default function Edit({ attributes, setAttributes }) {

	// Set the post ID of your Contact Page
	const postID = 14;

	// Fetch meta data as an object and the setMeta function
	const [meta, setMeta] = useEntityProp('postType', 'page', 'meta', postID);

	// Destructure all our meta data for ease of use
	const { company_email } = meta;

	// Flexible helper for setting a single meta value w/o mutating state
	const updateMeta = (key, value) => {
		setMeta({ ...meta, [key]: value });
	};

	const { svgIcon } = attributes;

	return (
		<>
			<email {...useBlockProps()}>
				{svgIcon &&
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-label="Email Icon">
						<path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
					</svg>

				}
				<RichText
					placeholder={__('Enter email here...', 'company-email')}
					tagName="p"
					value={company_email}
					onChange={(nextValue) => updateMeta("company_email", nextValue)}
				/>
			</email>
			<InspectorControls>
				<PanelBody title={__('Settings', 'company-email')}>
					<PanelRow>
						<ToggleControl
							label={__('Show SVG Icon', 'company-email')}
							checked={svgIcon}
							onChange={(value) =>
								setAttributes({ svgIcon: value })
							}
							help={__('Display an SVG icon next to the email.', 'company-email')}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
		</>
	);
}