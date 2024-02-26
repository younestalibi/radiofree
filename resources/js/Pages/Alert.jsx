import React, { useState } from 'react';
import Dialog from '@mui/material/Dialog';
import DialogTitle from '@mui/material/DialogTitle';
import DialogContent from '@mui/material/DialogContent';
import TextField from '@mui/material/TextField';
import Button from '@mui/material/Button';

function Alert({ open, onClose, onSubmit }) {
  const [inputValue, setInputValue] = useState('');

  const handleClose = () => {
    setInputValue('');
    onClose();
    
  };

  const handleSubmit = () => {
    onSubmit(inputValue);
    handleClose();
  };

  return (
    <Dialog open={open} onClose={handleClose}>
      <DialogTitle>Enter Value</DialogTitle>
      <DialogContent>
        <TextField
          label="Value"
          variant="outlined"
          value={inputValue}
          onChange={(e) => setInputValue(e.target.value)}
        />
      </DialogContent>
      <div style={{ padding: '16px', textAlign: 'center' }}>
        <Button variant="contained" color="primary" onClick={handleSubmit}>
          Submit
        </Button>
      </div>
    </Dialog>
  );
}

export default Alert;
