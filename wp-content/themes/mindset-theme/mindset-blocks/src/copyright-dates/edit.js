import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';



export default function Edit( { attributes, setAttributes } ) {
	const { startingYear } = attributes;
	const currentYear = new Date().getFullYear().toString();
	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Settings', 'copyright-date' ) }>
					<TextControl
						label={ __( 'Starting Year', 'copyright-date' ) }
						value={ startingYear }
						onChange={ ( newStartingYear ) => {
							setAttributes( { startingYear: newStartingYear } );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<p { ...useBlockProps() }>
				{ __( 'Copyright', 'copyright-date') } © { startingYear } - { currentYear }
			</p>
		</>
	);
}
