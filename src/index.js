import { registerBlockVariation } from '@wordpress/blocks';
import './style.scss';
import './editor.scss';

// import { registerBlockType } from '@wordpress/blocks';
// import Edit from './edit';
// import save from './save';
// import metadata from './block.json';

registerBlockVariation( 'core/query', {
  name: 'spotlight-post',
  title: 'Spotlight Post',
  description: 'Displays one Spotlight Post',  
  icon: 'edit-large',
  attributes: {
    className: 'spotlight-post',
    pages: 0,
    order: 'desc',
    orderBy: 'title',
    author: '',
    search: '',
    exclude: [],
    sticky: '',
    inherit: false,
    query: {
      postType: 'post',
      perPage: 1, 
      offset: 0
    },
  },
  scope: [ 'inserter' ],
  innerBlocks: [
    [ 'core/post-template', {},
      [ 
        [ 'core/post-featured-image', {
          className: 'spotlight-post__image'
        } ], 
        [ 'core/group' ,{
          className: 'spotlight-post__text'
        }, [
          [ 'core/paragraph', {
            content: 'Spotlight',
            className: 'spotlight-post__label'
          }],
          [ 'core/group', {
            className: 'spotlight-post__content'
          }, [
            [ 'core/post-date' ], 
            [ 'core/post-title' ], 
            [ 'core/post-content' ]
          ]]
        ]]
      ],
    ],
  ]
} )